from pymongo import MongoClient
client = MongoClient('localhost:27017')
db = client.TYIT229714
def update():
    try:   
        name = input("Enter Name: ")
        rollno = input("Enter Roll No: ")
        db.Student.update_one(
                                {"name": name},
                                {"$set": {"rollno":rollno}}
        )
        print("Records updated successfully")    
    except Exception:
        print(str(e))

update()
