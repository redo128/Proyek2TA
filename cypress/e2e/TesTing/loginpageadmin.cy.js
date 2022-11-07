/// <reference types="cypress" />

describe('Testing Pertama', () => {
    it('Melakukan Register', () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get('.mb-0 > .text-center').click()
        cy.get(':nth-child(2) > .form-control').type('redo129')
        cy.get(':nth-child(3) > .form-control').type('adit007@gmail.com')
        cy.get(':nth-child(4) > .form-control').type('1111')
        cy.get('.btn').click()
    });
    it('Melakukan Login', () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get(':nth-child(2) > .form-control').type('adit007@gmail.com')
        cy.get(':nth-child(3) > .form-control').type('1111')
        cy.get('.btn').click()

    });
})