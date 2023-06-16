<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %> <%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %> <%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" jdbcUrl="jdbc:mysql://localhost/dwadventureworks?user=root&password=" catalogUri="/WEB-INF/queries/purchasing.xml">
  select {[Measures].[Jumlah],[Measures].[Sub Total],[Measures].[Tax Amt],[Measures].[Freight],[Measures].[Total Due]} ON COLUMNS, {([Product],[Time].[All Times],[Vendor],[Shipping])} ON ROWS from [Purchase]
</jp:mondrianQuery>

<c:set var="title01" scope="session">Query DWADVENTUREWORKS using Mondrian OLAP</c:set>
