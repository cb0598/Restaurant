package arbeitseinheit;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import java.sql.*;

/**
 * Servlet implementation class Servlet01
 */
@WebServlet(
		urlPatterns = { "/ArbeitseinheitServlet" })

public class ArbeitseinheitServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ArbeitseinheitServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see Servlet#init(ServletConfig)
	 */
	public void init(ServletConfig config) throws ServletException {
		super.init(config);
		// TODO Auto-generated method stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType( "text/html" );
		response.getWriter().append("Served at: ").append(request.getContextPath());
		PrintWriter out = response.getWriter();		
		getDatafromDB(request, response);
	}

	private void getDatafromDB(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// Bean in Servlet
		ArbeitseinheitBean eObj1 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj2 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj3 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj4 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj5 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj6 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj7 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj8 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj9 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj10 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj11 = new ArbeitseinheitBean();
		ArbeitseinheitBean eObj12 = new ArbeitseinheitBean();

		try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            System.out.println("<b>MySQL-Treiber wurde geladen!</b>");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/restaurant","root","");
            Statement stmt=con.createStatement(); 
            ResultSet rs=stmt.executeQuery("select dienstplan.dpID, dienstplan.wochentag, dienstplan.schicht, mitarbeiter1.Name, mitarbeiter1.Nachname, mitarbeiter2.Name, mitarbeiter2.Nachname from dienstplan Inner JOIN mitarbeiter as mitarbeiter1 on (dienstplan.mitarbeiterNr1 = mitarbeiter1.MitarbeiterNr) Inner JOIN mitarbeiter as mitarbeiter2 on (dienstplan.mitarbeiterNr2 = mitarbeiter2.MitarbeiterNr)");
            
            while(rs.next()) {

             	if(rs.getString("dpID").equals("1")){ 
            		eObj1.setWochentag(rs.getString("wochentag"));
            	    eObj1.setSchicht(rs.getString(3));
            
            	    eObj1.setMitarbeiterNr1(rs.getString(4) + " "+ rs.getString(5));
            	    eObj1.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
            	               	                    
            	} else if (rs.getString(1).equals("2")) {
            		eObj2.setWochentag(rs.getString(2));
            	    eObj2.setSchicht(rs.getString(3));
            	    eObj2.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj2.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
            	    
					
				} else if (rs.getString(1).equals("3")) {
            		eObj3.setWochentag(rs.getString(2));
            	    eObj3.setSchicht(rs.getString(3));
            	    eObj3.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj3.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				} else if (rs.getString(1).equals("4")) {
            		eObj4.setWochentag(rs.getString(2));
            	    eObj4.setSchicht(rs.getString(3));
            	    eObj4.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj4.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("5")) {
            		eObj5.setWochentag(rs.getString(2));
            	    eObj5.setSchicht(rs.getString(3));
            	    eObj5.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj5.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("6")) {
            		eObj6.setWochentag(rs.getString(2));
            	    eObj6.setSchicht(rs.getString(3));
            	    eObj6.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj6.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("7")) {
            		eObj7.setWochentag(rs.getString(2));
            	    eObj7.setSchicht(rs.getString(3));
            	    eObj7.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj7.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("8")) {
            		eObj8.setWochentag(rs.getString(2));
            	    eObj8.setSchicht(rs.getString(3));
            	    eObj8.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj8.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("9")) {
            		eObj9.setWochentag(rs.getString(2));
            	    eObj9.setSchicht(rs.getString(3));
            	    eObj9.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj9.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("10")) {
            		eObj10.setWochentag(rs.getString(2));
            	    eObj10.setSchicht(rs.getString(3));
            	    eObj10.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj10.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("11")) {
            		eObj11.setWochentag(rs.getString(2));
            	    eObj11.setSchicht(rs.getString(3));
            	    eObj11.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj11.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 
					
				}else if (rs.getString(1).equals("12")) {
            		eObj12.setWochentag(rs.getString(2));
            	    eObj12.setSchicht(rs.getString(3));
            	    eObj12.setMitarbeiterNr1(rs.getString(4) + " " + rs.getString(5));
            	    eObj12.setMitarbeiterNr2(rs.getString(6) +" " + rs.getString(7)); 			
				}
            }
            con.close();  
        } catch (ClassNotFoundException e) {
            System.out.println("<b>MySQL-Treiber konnte nicht geladen werden</b>");
            System.out.println("<pre><code>");
            System.out.println(e.getStackTrace());
            System.out.println("</code></pre>");
        } catch (InstantiationException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IllegalAccessException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		/**** Storing Bean In Session ****/
		request.getSession().setAttribute("arbeitseinheit1", eObj1);
		request.getSession().setAttribute("arbeitseinheit2", eObj2);
		request.getSession().setAttribute("arbeitseinheit3", eObj3);
		request.getSession().setAttribute("arbeitseinheit4", eObj4);
		request.getSession().setAttribute("arbeitseinheit5", eObj5);
		request.getSession().setAttribute("arbeitseinheit6", eObj6);
		request.getSession().setAttribute("arbeitseinheit7", eObj7);
		request.getSession().setAttribute("arbeitseinheit8", eObj8);
		request.getSession().setAttribute("arbeitseinheit9", eObj9);
		request.getSession().setAttribute("arbeitseinheit10", eObj10);
		request.getSession().setAttribute("arbeitseinheit11", eObj11);
		request.getSession().setAttribute("arbeitseinheit12", eObj12);

		RequestDispatcher rd = request.getRequestDispatcher("/mitarbeiterDienstplan.jsp");
		rd.forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
