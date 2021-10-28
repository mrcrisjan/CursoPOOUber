class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo!");
        UberX UberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark GT");
        UberX.setPassenger(4);
        UberX.printDataCar();
        /*
        Car car2 = new Car("QEI387", new Account("Andrea Gomez", "ANA886"));
        car2.passenger = 6;
        car2.printDataCar(); */
        
        UberVan uberVan = new UberVan("KNF983", new Account("Andres Jhonson", "AND654"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}