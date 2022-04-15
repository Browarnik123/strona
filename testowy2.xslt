<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:output method="html"/>
 
 

    <xsl:template match="/">
        
        <html>
			<head>
			    
			    <style>
                #kontener{
                  background-image: url('images/wzor-faktura-proforma.gif');
                  background-repeat: no-repeat;
                  height:700px;
                  width:100%;
                }
                
                td{
                    height:10px;
                    text-align: center;
                }
                
                tr{
                    height:18.4px!important;
                }
                </style>
			
			</head>
			
			<div id="kontener">
			
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
			</div>
		</html>
        
        
      <xsl:call-template name="sumProducts">
        <xsl:with-param name="pList" select="Dane/Service"/>
      </xsl:call-template>
    </xsl:template>

    <xsl:template name="sumProducts">
        <xsl:param name="pList"/>
        
        <xsl:param name="sumabrutto" select="0"/>
        <xsl:param name="sumanetto" select="0"/>
        <xsl:param name="sumavat" select="0"/>
        

        <xsl:choose>
          <xsl:when test="$pList">
            <xsl:call-template name="sumProducts">
                <xsl:with-param name="pList" select="$pList[position() > 1]"/>
              <xsl:with-param name="sumabrutto" select="$sumabrutto + $pList/Price * $pList/Quantity"/>
              
              <xsl:with-param name="sumanetto" select="$sumanetto + $pList/Price * $pList/Quantity + $pList/Price * $pList/Quantity * $pList/Vatp div 100"/>
              
              <xsl:with-param name="sumavat" select="$sumavat + $pList/Price * $pList/Quantity * $pList/Vatp div 100 "/>
              
            </xsl:call-template>
          </xsl:when>
          <xsl:otherwise>
              
              <div style = "position:relative; left:335px; top:236px;
				font-size: 12px;">
                  <xsl:value-of select="$sumabrutto"/>
              </div>
              
              <div style = "position:relative; left:495px; top:221px;
				font-size: 12px;">
                  <xsl:value-of select="$sumanetto"/>
              </div>
              
              <div style = "position:relative; left:485px; top:269px;
				font-size: 12px;">
                  <xsl:value-of select="$sumanetto"/>
              </div>
              
              <div style = "position:relative; left:440px; top:191px;
				font-size: 12px;">
                  <xsl:value-of select="$sumavat"/>
              </div>
              
            
          </xsl:otherwise>
        </xsl:choose>
        
        
        
        
        
        
    </xsl:template>
</xsl:stylesheet>