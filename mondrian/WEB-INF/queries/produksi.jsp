<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %> <%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %> <%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" jdbcUrl="jdbc:mysql://localhost/dwadventureworks?user=root&password=" catalogUri="/WEB-INF/queries/produksi.xml">
  select {[Measures].[Order Qty],[Measures].[Hours],[Measures].[Cost]} ON COLUMNS, {([Product],[Time].[All Times],[Location])} ON ROWS from [Production]
</jp:mondrianQuery>

<c:set var="title01" scope="session">Query DWADVENTUREWORKS using Mondrian OLAP</c:set>
