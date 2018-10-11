package meine_servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebInitParam;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import java.sql.*;

/**
 * Servlet implementation class Servlet01
 */
@WebServlet(
		urlPatterns = { "/MitarbeiterServlet" }, 
		initParams = { 
				@WebInitParam(name = "anfangswert01", value = "5")
		})
public class MitarbeiterServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public MitarbeiterServlet() {
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
		response.getWriter().append("Served at: ").append(request.getContextPath());
		PrintWriter out = response.getWriter();
		String contextParameterName = "anfangswert01";
		String contextParameterWert = this.getInitParameter(contextParameterName);
		out.println("Der Context-Parameter " + contextParameterName + " hat den Wert " +
		contextParameterWert + ".");
		
		getDatafromDB(request, response);
			
		/*getDatafromDB(eObj1);
		getDatafromDB(eObj2);
		getDatafromDB(eObj3);
		getDatafromDB(eObj4);
		getDatafromDB(eObj5);
		getDatafromDB(eObj6);	
		*/

	}

	private void getDatafromDB(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// Bean in Servlet
		MitarbeiterBean eObj1 = new MitarbeiterBean();
		MitarbeiterBean eObj2 = new MitarbeiterBean();
		MitarbeiterBean eObj3 = new MitarbeiterBean();
		MitarbeiterBean eObj4 = new MitarbeiterBean();
		MitarbeiterBean eObj5 = new MitarbeiterBean();
		MitarbeiterBean eObj6 = new MitarbeiterBean();
		MitarbeiterBean eObj7 = new MitarbeiterBean();
		MitarbeiterBean eObj8 = new MitarbeiterBean();
		MitarbeiterBean eObj9 = new MitarbeiterBean();
		MitarbeiterBean eObj10 = new MitarbeiterBean();
		MitarbeiterBean eObj11 = new MitarbeiterBean();
		MitarbeiterBean eObj12 = new MitarbeiterBean();
		String[] wochentag = new String[20];
		String[] schicht = new String[20];
		String [] name = new String[20];
		String [] nachname = new String[20];
		int i= 0;
		int counter = 1;
		try {
            // Laut MySQL-Web-Seiten ist zusaetzlicher Aufruf von
            // newInstance() wegen moeglicher Probleme in
            // manchen Java-Varianten anzuraten.

            Class.forName("com.mysql.jdbc.Driver").newInstance();
            System.out.println("<b>MySQL-Treiber wurde geladen!</b>");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/restaurant","root","");
            Statement stmt=con.createStatement(); 
            ResultSet rs=stmt.executeQuery("select * from dienstplan");
            System.out.println(rs + "hihi");
            while(rs.next()) {
             	if(rs.getString(1).equals("1")){ 
            		eObj1.setWochentag(rs.getString(2));
            	    eObj1.setSchicht(rs.getString(3));
            	    eObj1.setName(rs.getString(4));
            	    eObj1.setNachname(rs.getString(5));
                    
            	} else if (rs.getString(1).equals("2")) {
            		eObj2.setWochentag(rs.getString(2));
            	    eObj2.setSchicht(rs.getString(3));
            	    eObj2.setName(rs.getString(4));
            	    eObj2.setNachname(rs.getString(5));
					
				} else if (rs.getString(1).equals("3")) {
            		eObj3.setWochentag(rs.getString(2));
            	    eObj3.setSchicht(rs.getString(3));
            	    eObj3.setName(rs.getString(4));
            	    eObj3.setNachname(rs.getString(5));
					
				} else if (rs.getString(1).equals("4")) {
            		eObj4.setWochentag(rs.getString(2));
            	    eObj4.setSchicht(rs.getString(3));
            	    eObj4.setName(rs.getString(4));
            	    eObj4.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("5")) {
            		eObj5.setWochentag(rs.getString(2));
            	    eObj5.setSchicht(rs.getString(3));
            	    eObj5.setName(rs.getString(4));
            	    eObj5.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("6")) {
            		eObj6.setWochentag(rs.getString(2));
            	    eObj6.setSchicht(rs.getString(3));
            	    eObj6.setName(rs.getString(4));
            	    eObj6.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("7")) {
            		eObj7.setWochentag(rs.getString(2));
            	    eObj7.setSchicht(rs.getString(3));
            	    eObj7.setName(rs.getString(4));
            	    eObj7.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("8")) {
            		eObj8.setWochentag(rs.getString(2));
            	    eObj8.setSchicht(rs.getString(3));
            	    eObj8.setName(rs.getString(4));
            	    eObj8.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("9")) {
            		eObj9.setWochentag(rs.getString(2));
            	    eObj9.setSchicht(rs.getString(3));
            	    eObj9.setName(rs.getString(4));
            	    eObj9.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("10")) {
            		eObj10.setWochentag(rs.getString(2));
            	    eObj10.setSchicht(rs.getString(3));
            	    eObj10.setName(rs.getString(4));
            	    eObj10.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("11")) {
            		eObj11.setWochentag(rs.getString(2));
            	    eObj11.setSchicht(rs.getString(3));
            	    eObj11.setName(rs.getString(4));
            	    eObj11.setNachname(rs.getString(5));
					
				}else if (rs.getString(1).equals("12")) {
            		eObj12.setWochentag(rs.getString(2));
            	    eObj12.setSchicht(rs.getString(3));
            	    eObj12.setName(rs.getString(4));
            	    eObj12.setNachname(rs.getString(5));
					
				}
            	System.out.println("asdf"+eObj1.getName());
            	System.out.println(rs.getString(1));
            	System.out.println(rs.getString(2));
            	System.out.println(rs.getString(3));
            	System.out.println(rs.getString(4));
            	System.out.println(rs.getString(5));
            	System.out.println(rs.getString(6));
            	
            	
				
            	
            	/*Object[] row = new Object[4];
            	for (int i1 = 1; i1 <= 4; ++i1) {
            	    row[i1 - 1] = rs.getString(i1); // Or even rs.getObject()
            	    System.out.println("test!!!!!!"+ row[i1 - 1]);
            	    eObj1.setWochentag(rs.getString(i1));
            	    eObj1.setSchicht(rs.getString(i1));
            	    eObj1.setName(rs.getString(i1));
            	    eObj1.setNachname(rs.getString(i1));
            	    
            	}*/
            }
            	/*System.out.println();
            	//model.addRow(row);
            	
            	
            	wochentag[i] = rs.getString(2);
            	schicht[i] = rs.getString(3);
            	name[i] = rs.getString(4);
            	nachname[i] = rs.getString(5);
            	eObj.setWochentag(rs.getString(2));
            	eObj.setSchicht(rs.getString(3));
            	eObj.setName(rs.getString(4) + " " + rs.getString(5));
            	//eObj.setNachname(rs.getString(5));
            	System.out.println("hallo" + rs.getString(2));
            	System.out.println("hallo" + rs.getString(4));
            	i++;
            	
            
      
            for (int j = 0; j < wochentag.length; j++) {
				System.out.println("hihi"+wochentag[j]);
			}
            	System.out.println("  "+rs.getString(2)+"  "+rs.getString(3));*/  
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
		request.getSession().setAttribute("mitarbeiter1", eObj1);
		request.getSession().setAttribute("mitarbeiter2", eObj2);
		request.getSession().setAttribute("mitarbeiter3", eObj3);
		request.getSession().setAttribute("mitarbeiter4", eObj4);
		request.getSession().setAttribute("mitarbeiter5", eObj5);
		request.getSession().setAttribute("mitarbeiter6", eObj6);
		request.getSession().setAttribute("mitarbeiter7", eObj7);
		request.getSession().setAttribute("mitarbeiter8", eObj8);
		request.getSession().setAttribute("mitarbeiter9", eObj9);
		request.getSession().setAttribute("mitarbeiter10", eObj10);
		request.getSession().setAttribute("mitarbeiter11", eObj11);
		request.getSession().setAttribute("mitarbeiter12", eObj12);

		RequestDispatcher rd = request.getRequestDispatcher("/Restaurant%20UI/mitarbeiterDienstplan.jsp");
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
