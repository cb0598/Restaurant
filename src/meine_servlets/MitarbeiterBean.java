package meine_servlets;

// bean mit 3 Variablen mit settern & gettern
// Objekt dieses Beans wird in Servlet controller class verwendet
public class MitarbeiterBean {

	private String wochentag;
	private String schicht;
	private String name;
	private String nachname;
	

	public String getWochentag() {
		return wochentag;
	}
	public void setWochentag(String wochentag) {
		this.wochentag = wochentag;
	}
	public String getSchicht() {
		return schicht;
	}
	public void setSchicht(String schicht) {
		this.schicht = schicht;
	}

	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	
	public String getNachname() {
		return nachname;
	}
	public void setNachname(String nachname) {
		this.nachname = nachname;
	}
}
