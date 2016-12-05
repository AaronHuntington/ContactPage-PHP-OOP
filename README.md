
#This is a contact page that a user can fill out and sends it to: 
#	1. A specified email.
#	2. A database. (Just in case emailing the message fails)
#  
#Step by step in using this contact form.
#	1. Go to 'includes/config.php' and enter in:
#		+ Database Host
#		+ Database User
#	  	+ Database Password
#		+ Database Name
#
#	2. Build database
#		Name of database: git_contactpg
#		Table: contact_form_inbox
# 			Columns:
#				id: integer,incremental, primary.
#				name: varchar
#				email: varchar
#				phone: varchar
#				message: text
