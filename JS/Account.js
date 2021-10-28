function Account(id, name, document, email, password) {
    this.id = id;
    this.name = name;
    this.document = document;
    this.email = email;
    this.password = password;
}

Account.prototype.printDataUser = function () {
    document.write(`${this.id}<br>`);
    document.write(`${this.name}<br>`);
    document.write(`${this.document}<br>`);
    document.write(`${this.email}<br>`);
    document.write(`${this.password}<br>`);
}
