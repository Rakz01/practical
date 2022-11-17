from pymongo import MongoClient
client=MongoClient("localhost",27017)
db=client.TYIT_229714
def insert():
    try:
        FName=input("Enter first name: ")
        LName=input("Enter last name: ")
        Age=(input("Enter age"))
        Gender=input("Enter gender")
        Country=input("Enter country")

        db.student.insert_one(
            {
                FName:"FName",
                LName:"LName",
                Age:"Age",
                Gender:"Gender",
                Country:"Country"
            }
        )
        print("data inserted")
    except Exception as e:
        print(str(e))
insert()
