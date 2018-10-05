package meine_servlets;

// Servlet Controller Class
// Objekt für Mitarbeiter-Bean erstellen und Werte übergeben, indem setter methoden der Bean-Klasse verwenden
// diese Werte werden in setAttribute() gespeichert vom HTTPServletRequest-Objekt
// diese Anfrage wird an beanData.jsp weitergegeben, indem Request Dispatcher benutzt wird, um die Attribute verfügbar zu machen
import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/beanInServlet")
public class BeanInServlet extends HttpServlet {

	private static final long serialVersionUID = 1L;

	// This Method Is Called By The Servlet Container To Process A 'GET' Request.
	public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException {
		handleRequest(request, response);
	}

	public void handleRequest(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException {

		Mitarbeiter eObj = new Mitarbeiter();
		eObj.setEmp_id(101);
		eObj.setEmp_name("Hi Java Code Geeks");
		eObj.setEmp_passwort("test123");

		/**** Storing Bean In Session ****/
		request.getSession().setAttribute("emp", eObj);

		RequestDispatcher rd = request.getRequestDispatcher("/beanData.jsp");
		rd.forward(request, response);
	}
}