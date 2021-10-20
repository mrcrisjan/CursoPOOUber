from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola mundo!")

    car = Car("JHD984", Account("Wilson Charles", "ID23432"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("NSK097", Account("Ana Gonzales", "ID09872"))
    print(vars(car2))