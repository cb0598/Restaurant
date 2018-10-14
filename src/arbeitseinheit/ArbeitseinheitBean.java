package arbeitseinheit;

// bean mit 3 Variablen mit settern & gettern
// Objekt dieses Beans wird in Servlet controller class verwendet
public class ArbeitseinheitBean {

	private String wochentag;
	private String schicht;
	private String mitarbeiterNr1;
	private String mitarbeiterNr2;
	

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

	public String getMitarbeiterNr1() {
		return mitarbeiterNr1;
	}
	public void setMitarbeiterNr1(String mitarbeiterNr1) {
		this.mitarbeiterNr1 = mitarbeiterNr1;
	}
	
	public String getMitarbeiterNr2() {
		return mitarbeiterNr2;
	}
	public void setMitarbeiterNr2(String mitarbeiterNr2) {
		this.mitarbeiterNr2 = mitarbeiterNr2;
	}
}
