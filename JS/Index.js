var car = new Car("KJD983", new Account("Cristian Ladino", "CRIS349"));
car.passenger = 4;
car.printDataCar();

var uberX = new UberX("JTH322", new Account("Andrew Lopez", "ID2349"), "Chevrolet", "Spark");
uberX.passenger = 4;
uberX.printDataCar();

var driver1 = new Driver("ID8732", "Alex Campos", "DOC872", "email@email.com", "blaBla2021");
driver1.printDataUser();