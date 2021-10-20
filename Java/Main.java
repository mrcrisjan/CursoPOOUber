class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo!");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QEI387", new Account("Andrea Gomez", "ANA886"));
        car2.passenger = 6;
        car2.printDataCar();
    }
}