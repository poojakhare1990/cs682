import static org.junit.jupiter.api.Assertions.*;
import java.io.IOException;
import java.net.MalformedURLException;
import org.junit.jupiter.api.Test;
import com.gargoylesoftware.htmlunit.FailingHttpStatusCodeException;
import com.gargoylesoftware.htmlunit.WebClient;
import com.gargoylesoftware.htmlunit.html.HtmlForm;
import com.gargoylesoftware.htmlunit.html.HtmlPage;
import com.gargoylesoftware.htmlunit.html.HtmlTable;

class TestCases {
	@Test
	void testLoginPage() {  //Test login page
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/index.html");
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("Home", currentPage.getTitleText());
		webClient.close();
	}
	@Test
	void testLoginPageFormAction() {  //Test login page form action
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String action = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/index.html");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			action = htmlForm.getActionAttribute();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("./login/Login.php", action);
		webClient.close();
	}
	@Test
	void testLoginPageUsernameInput() {  //Test Username input
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String usernameInput = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/index.html");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			usernameInput = htmlForm.getInputByName("Username").getId();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("usr", usernameInput);
		webClient.close();
	}
	@Test
	void testLoginPagePasswordInput() {  //Test Password input
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String passwordInput = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/index.html");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			passwordInput = htmlForm.getInputByName("Password").getId();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("pwd", passwordInput);
		webClient.close();
	}
	@Test
	void testAdminPage() {  //Test title of the admin page
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String titleName = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/admin.php");
			titleName = currentPage.getTitleText();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("Admin Page", titleName);
		webClient.close();
	}
	@Test
	void testAdminPageGetBuilding() {  //Test getBuilding table
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementName = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/building/getBuilding.php");
			elementName = currentPage.getElementById("getBuilding").getLocalName();			
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementName);
		webClient.close();
	}
	@Test
	void testAdminPageAddBuildingNameInput() {  //Test addBuilding name input
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String buildingInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/building/add.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			buildingInputId = htmlForm.getInputByName("building").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("name", buildingInputId);
		webClient.close();
	}
	@Test
	void testAdminPageAddManagerNameInput() {  //Test add manager name
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String managerInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/building/add.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			managerInputId = htmlForm.getInputByName("manager").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("manager", managerInputId);
		webClient.close();
	}
	@Test
	void testAdminPageAddTechnicianNameInput() {  //Test add technician name
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String technicianInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/building/add.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			technicianInputId = htmlForm.getInputByName("technician").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("technician", technicianInputId);
		webClient.close();
	}
	@Test
	void testAdminPageAddBuildingUserNameManagerInput() {  //Test add building username -- manager
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String managerInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/building/addBuildingUser.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			managerInputId = htmlForm.getInputByName("manager").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("manager", managerInputId);
		webClient.close();
	}
	@Test
	void testAdminPageAddBuildingUserNameTechnicianInput() {  //Test add building username -- technician
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String technicianInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/building/addBuildingUser.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			technicianInputId = htmlForm.getInputByName("technician").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("technician", technicianInputId);
		webClient.close();
	}
	@Test
	void testAdminPageAddQuestionQuestionInput() {  //Test add question
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String questionInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/addQuestion.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			questionInputId = htmlForm.getInputByName("question").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("question", questionInputId);
		webClient.close();
	}
	@Test
	void testAdminPageAddQuestionQuestionTypeInput() {  //Test question type selection
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String questionTypeSelectionId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/addQuestion.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			questionTypeSelectionId = htmlForm.getSelectByName("Type").getId();	
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("questionType", questionTypeSelectionId);
		webClient.close();
	}
	@Test
	void testAdminPageFormEdit() {  //Test edit form type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType= null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/edit.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testAdminPageFormBuildingForm() {  //Test building form type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType= null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/buildingForm.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testAdminPageFormForm() {  //Test form table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType= null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/form.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testAdminPageFormGetForm() {  //Test getForm table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType= null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/getForm.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testAdminPageFormGetOptions() {  //Test getOption table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType= null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/form/getOptions.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testAdminPageUserEmployee() {  //Test employee table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType= null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/user/employee.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testAdminPageUserAddNameListUsernameInput() {  //Test add new user input
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String UsernameInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/user/addNameList.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			UsernameInputId = htmlForm.getInputByName("Username").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("usr", UsernameInputId);
		webClient.close();
	}
	@Test
	void testAdminPageUserAddNameListPasswordInput() {  //Test add new user password input
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String UsernameInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/user/addNameList.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			UsernameInputId = htmlForm.getInputByName("Password").getId();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("pwd1", UsernameInputId);
		webClient.close();
	}
	@Test
	void testAdminPageUserAddNameListRoleInput() {  //Test add new user role input
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String RoleInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/admin/user/addNameList.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			RoleInputId = htmlForm.getSelectByName("Role").getId();	
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("role", RoleInputId);
		webClient.close();
	}
	@Test
	void testManagerPage() {  //Test manager title
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String title = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/manager.php");
			title = currentPage.getTitleText();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("Manager Page", title);
		webClient.close();
	}
	@Test
	void testManagerPageBuildingAdd() {  //Test table type in add.php
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String formId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/building/add.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("Myform");
			formId = htmlForm.getId();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("add", formId);
		webClient.close();
	}
	@Test
	void testManagerPageBuildingAddBuildingUserTechnicianInput() {  //Test technician input id
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String technicianInputId = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/building/addBuildingUser.php");
			HtmlForm htmlForm = (HtmlForm)currentPage.getFormByName("addBuildingUser");
			technicianInputId = htmlForm.getInputByName("technician").getId();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("technician", technicianInputId);
		webClient.close();
	}
	@Test
	void testManagerPageBuildingGetBuilding() {  //Test get building table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String titleText = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/building/getBuilding.php");
			titleText = currentPage.getTitleText();		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("Manager Page", titleText);
		webClient.close();
	}
	@Test
	void testManagerPageFormBuildingForm() {  //Test buildingForm type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/form/buildingForm.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testManagerPageFormEdit() {  //Test edit.php table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/form/edit.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testManagerPageFormForm() {  //Test form table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/form/form.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementById("Myform");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testManagerPageFormGetForm() {  //Test getForm table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/form/getForm.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementByName("getForm");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testManagerPageFormGetOptions() {  //Test getOption table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/manager/form/getOptions.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementByName("getOptions");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testTechnicianPage() {  //Test technician title
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String title = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/technician/technician.php");
			title = currentPage.getTitleText();
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("Technician Page", title);
		webClient.close();
	}
	@Test
	void testTechnicianPageBuildingGetBuilding() {  //Test getBuilding table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/technician/building/getBuilding.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementByName("getBuilding");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testTechnicianPageFormForm() {  //Test form table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/technician/form/form.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementByName("form");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testTechnicianPageFormGetForm() {  //Test getForm table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/technician/form/getForm.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementByName("getForm");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
	@Test
	void testTechnicianPageFormView() {  //Test view table type
		WebClient webClient = new WebClient();
		HtmlPage currentPage = null;
		String elementType = null;
		try {
			currentPage = webClient.getPage("http://localhost/682/technician/form/view.php");
			HtmlTable htmlTable = (HtmlTable)currentPage.getElementByName("view");
			elementType = htmlTable.getLocalName(); 		
		} catch (FailingHttpStatusCodeException e) {
			e.printStackTrace();
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		assertEquals("table", elementType);
		webClient.close();
	}
}
