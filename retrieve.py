from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.TYIT_229714

def retrieve():
    try:
        col=db.users.find()
        for users in col:
            print(users)

    except Exception as e:
        print(str(e))
retrieve()
