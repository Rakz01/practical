import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import com.mongodb.MongoCredential;
import org.bson.Document;

public class insert
{
    public static void main(String args[])
    {
        MongoClient mongo=new MongoClient("localhost",27017);
        System.out.println("database connected");
        MongoDatabase database=mongo.getDatabase("TYIT_229714");
        MongoCollection<Document> collection =database.getCollection("users");
        Document doc=new Document();
        doc.append("id",1);
        doc.append("name","Raksha");
        doc.append("age",20);
	collection.insertOne(doc);
    	System.out.println("insrerted....");
    }
    
}