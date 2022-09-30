/// <reference types="cypress" />

describe('Testing CRUD', () => {
    const login = () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get(':nth-child(2) > .form-control').type('adit007@gmail.com')
        cy.get(':nth-child(3) > .form-control').type('1111')
        cy.get('.btn').click()
    }
    it('Menambahkan Data', () => {
        login()
        cy.get('[href=""] > p').click()
        cy.get('.menu-is-opening > .nav > :nth-child(1) > .nav-link > p').click()
        cy.get('.btn').click()
        cy.get('#Nama').type("PAJENGEMING")
        cy.get('.btn').click()
    });
    it('Show Data', () => {
        login()
        cy.get('[href=""] > p').click()
        cy.get('.menu-is-opening > .nav > :nth-child(1) > .nav-link').click()
        cy.get('.btn-info').click()
        cy.get('.btn').click()
        cy.get(':nth-child(3) > .nav > .nav-item > .nav-link > p').click()
    });
    it('Delete Data', () => {
        login()
        cy.get('[href=""] > p').click()
        cy.get('.menu-is-opening > .nav > :nth-child(1) > .nav-link').click()
        cy.get('.btn-danger').click()
    });
})