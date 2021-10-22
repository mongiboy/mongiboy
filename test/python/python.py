class Person:
    name = "Ivan"
    age = 10

    def set(self, name, age):
        self.name = name
        self.age = age 

class Student(Person):
    course = 1

jonn = Person()
jonn.set("Jonn", 25)
# print(jonn.name + " " + str(jonn.age))

ivan = Person()
ivan.set("Ivan", 31)
# print(ivan.name + " " + str(ivan.age))

kurt = Student()
kurt.set("Kurt", 27)
kurt.course = 2
print(kurt.name + ", " + str(kurt.age))
