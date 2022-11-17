import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import com.mongodb.MongoCredential;
import org.bson.Document;
import com.mongodb.client.model.Filters;
public class delete
{
	public static void main(String args[])
	{
		MongoClient mongo=new MongoClient("localhost",27017);
		MongoDatabase database=mongo.getDatabase("TYIT_229714");
		MongoCollection<Document> col=database.getCollection("users");
		col.deleteOne(Filters.eq("id",1));
		
	}
}

























