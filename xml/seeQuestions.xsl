<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

		<table border="1">
			<tr>
				<th style="text-align:center"> Galdera </th>
				<th style="text-align:center"> Zailtasuna </th>
				<th style="text-align:center"> Arloa </th>
			</tr>
			<xsl:for-each select="assessementItems/assessmentItem">	
				<tr>
					<td><xsl:value-of select="itemBody/p"/></td>
					<td><xsl:value-of select="@complexity"/></td>
					<td><xsl:value-of select="@subject"/></td>
				</tr>
			</xsl:for-each>
		</table>
	
</xsl:template>

</xsl:stylesheet>