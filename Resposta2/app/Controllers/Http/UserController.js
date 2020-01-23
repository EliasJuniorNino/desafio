'use strict'

const User = use('App/Models/User')
const { validateAll } = use('Validator')

class UserController {
  async store ({ request, response }) {
    const data = request.all()

    const erroMessage = {
      'nome.required': 'Usuario deve ter um nome',
      'nome.min': 'O nome do usuario deve ter pelomenos 3 caracteres',
      'cpf.unique': 'Ja existe um usuario com este cpf',
      'email.unique': 'Ja existe um usuario com este email',
      'email.required': 'Email é obrigatorio',
    }

    const validation = await validateAll(data, {
      nome: 'required|min:3',
      cpf: 'unique:users',
      email: 'required|unique:users'
    }, erroMessage)

    if (validation.fails()) {
      return response.status(401).send(validation.messages())
    }

    return await User.create(data)
  }

  async show({ params, request, response }){
    const user = await User.find(params.id)

    if (!user)
      return response.status(401).send({
        error: true,
        message: 'Este usuario nao existe'
      })

    return {
      ...user.toJSON(),
      password: undefined
    }
  }

  async update({ params, request, response }) {
    const user = await User.find(params.id)
    const data = request.all()

    if (!user)
      return response.status(401).send({
        error: true,
        message: 'Este usuario nao existe'
      })

    await user.merge(data)

    return {
      ...user.toJSON(),
      password: undefined
    }
  }

  async destroy({ params, request, response }) {
    const user = await User.find(params.id)

    if (!user)
      return response.status(401).send({
        error: true,
        message: 'Este usuario nao existe'
      })

    if(!await user.delete())
      return response.send({
        error: true,
        message: 'Não foi possivel deletar este usuario'
      })

    return {
      ok: true
    }
  }

}

module.exports = UserController
