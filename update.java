import java.net.UnknownHostException;
import com.mongodb.BasicDBObject;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.DBObject;
import com.mongodb.MongoClient;
import com.mongodb.WriteResult;
public class update
{
	public static void main(String args[])
	{
		MongoClient mongo=new MongoClient("localhost",27017);
		DB db=mongo.getDB("TYIT_229714");
		DBCollection col=db.getCollection("users");
		DBObject query=new BasicDBObject("id",1);
		DBObject update=new BasicDBObject();
		update.put("$set",new BasicDBObject("age",18));
		WriteResult result=col.update(query,update);
		mongo.close();
	}
}
































