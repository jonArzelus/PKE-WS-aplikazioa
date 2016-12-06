<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<HTML>
	<BODY>
		<TABLE class="table table-striped">
			
			<tr>
				<th style="text-align:center"> Galdera </th>
				<th style="text-align:center"> Zailtasuna </th>
				<th style="text-align:center"> Arloa </th>
			</tr>
			<xsl:for-each select="/assessmentItems/assessmentItem" >
				<TR>
					<TD>
						<FONT SIZE="2" COLOR="black" FACE="Verdana">
							<xsl:value-of select="itemBody/p"/>
						</FONT>
					</TD>
					<TD style="text-align:center">
						<FONT SIZE="2" COLOR="green" FACE="Verdana">
							<xsl:choose>
								<xsl:when test="@complexity='1'">
								✪
								</xsl:when>
								<xsl:when test="@complexity='2'">
								✪✪
								</xsl:when>
								<xsl:when test="@complexity='3'">
								✪✪✪
								</xsl:when>
								<xsl:when test="@complexity='4'">
								✪✪✪✪
								</xsl:when>
								<xsl:when test="@complexity='5'">
								✪✪✪✪✪
								</xsl:when>
								<xsl:otherwise> 
                              	Low 
                           		</xsl:otherwise> 
							</xsl:choose>
							<!--<xsl:value-of select="@complexity"/>--> <BR/>
						</FONT>
					</TD>
					<TD>
						<FONT SIZE="2" COLOR="blue" FACE="Verdana">
							<xsl:value-of select="@subject"/> <BR/>
						</FONT>
					</TD>
				</TR>
			</xsl:for-each>
		</TABLE>
	</BODY>
</HTML>
</xsl:template>
</xsl:stylesheet>

