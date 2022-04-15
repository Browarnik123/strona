<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml.dtd" encoding="ISO-8859-2" method="html"/>
	
	<xsl:template match="/">
	
		<html>
			<head>
			    
			    <style>
                body {
                  background-image: url('images/wzor-faktura-proforma.gif');
                  background-repeat: no-repeat;
                }
                
                td{
                    height:10px;
                    text-align: center;
                }
                </style>
			
			</head>
			
			<body>
			    
			    
				
				<div style = "position:relative; left:255px; top:90px;
				font-size: 15px;">
					<xsl:for-each select="Dane/Date">
					    
					<xsl:value-of select="Day"/>
					

					<xsl:value-of select="Month"/>

					<xsl:value-of select="Year"/>
				    </xsl:for-each>
				</div>
				
				<div style = "position:relative; left:30px; top:260px;
				font-size: 15px;">
				    <table>
				        
				    
					<xsl:for-each select="Dane/Service">
					    <tr>
					    
					<td style = "width:100px"><xsl:value-of select="Name"/></td>
					

					<td style = "width:40px"><xsl:value-of select="PKWIU"/></td>

					<td style = "width:30px"><xsl:value-of select="Jm"/></td>
					
					<td style = "width:35px" ><xsl:value-of select="Quantity"/></td>
					
					<td style = "width:50px"><xsl:value-of select="Price"/></td>
					
					<td style = "width:70px" ><xsl:value-of select="Price * Quantity"/></td>
					
					<td style = "width:25px" ><xsl:value-of select="Vatp"/></td>
					
					<td style = "width:50px" ><xsl:value-of select="Price * Quantity * Vatp div 100"/></td>
					
					<td style = "width:70px" ><xsl:value-of select="Price * Quantity + Price * Quantity * Vatp div 100"/></td>
					    </tr>
				    </xsl:for-each>
				    </table>
				</div>
				
				<div>
					<xsl:value-of select="Dane/Osoba/Imie"/>
				</div>
				
				



			
			
			</body>
		</html>
		
	</xsl:template>
</xsl:stylesheet>
