from pymongo import MongoClient
client = MongoClient('localhost',27017)
db = client.TYIT229714
def delete():
    try:
        name = input("Enter name : ")
        db.Student.delete_one(
                {"name":name}
            )
        print("Deletion successful") 
    except (Exception):
        print(str(e))

delete()
