import java.util.Date;
import java.util.*;

public class Order {
	String Status;
	Date CreationTime;
	ShoppingCart PurchasingItems = new ShoppingCart();
	User OurUser;	
	ArrayList<Device> PurchasingItemsList = new ArrayList<>();	
	
	Order(ShoppingCart m_PurchasingItems, Credentials m_Customers, int Customer) {
		Status = "Ожидание";
		CreationTime = new Date();
		PurchasingItemsList = m_PurchasingItems.ShoppingCartList;
		User[] UsersArray = {};
		UsersArray = m_Customers.Users.toArray(new User[m_Customers.Users.size()]);
		OurUser = UsersArray[Customer];		
	}		
	
}
			
