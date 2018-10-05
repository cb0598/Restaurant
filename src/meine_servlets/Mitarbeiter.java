package meine_servlets;

// bean mit 3 Variablen mit settern & gettern
// Objekt dieses Beans wird in Servlet controller class verwendet
public class Mitarbeiter {
	private int emp_id;
	private String emp_name;
	private String emp_passwort;

	public int getEmp_id() {
		return emp_id;
	}

	public void setEmp_id(int emp_id) {
		this.emp_id = emp_id;
	}

	public String getEmp_name() {
		return emp_name;
	}

	public void setEmp_name(String emp_name) {
		this.emp_name = emp_name;
	}

	public String getEmp_passwort() {
		return emp_passwort;
	}

	public void setEmp_passwort(String emp_passwort) {
		this.emp_passwort = emp_passwort;
	}
}
