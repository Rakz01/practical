import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import com.mongodb.MongoCredential;
import org.bson.Document;
import java.util.Iterator;
import com.mongodb.client.FindIterable;
public class read
{
	public static void main(String args[])
	{
		MongoClient mongo=new MongoClient("localhost",27017);
		MongoDatabase database=mongo.getDatabase("TYIT_229714");
		MongoCollection<Document> col=database.getCollection("users");
		FindIterable<Document> iterDoc = col.find();
		int i=1;
		Iterator it=iterDoc.iterator();
		while(it.hasNext())
		{
			System.out.println(it.next());
			i++;
		}
	}
}