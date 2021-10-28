from car import Car
from account import Account
from UberX import UberX

if __name__ == "__main__":
    print("Hola mundo!")

    car = Car("JHD984", Account("Wilson Charles", "ID23432"))
    print(vars(car))

    car2 = Car("NSK097", Account("Ana Gonzales", "ID09872"))
    print(vars(car2))

    uberX = UberX("KNC234", Account("Helena Pallares", "ID87234"), "Chevrolet", "Spark")
    print(vars(uberX))