'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class UserSchema extends Schema {
  up () {
    this.create('users', (table) => {
      table.increments()

      table.string('cpf', 11).notNullable().unique()
      table.string('password', 60).notNullable()

      table.string('email', 254).notNullable().unique()
      table.string('nome', 200)
      table.string('nascimento', 11)
      table.integer('sexo')
      table.integer('estado_civil')
      table.string('telefone', 15)
      table.string('endereco')
      table.string('cep', 9)

      table.timestamps()
    })
  }

  down () {
    this.drop('users')
  }
}

module.exports = UserSchema
