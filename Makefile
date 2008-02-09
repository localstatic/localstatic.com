
gpgkey:
	@gpg --fingerprint morgan@localstatic.com | head -2 | sed s/'     '// > files/gpgkey.txt
	@echo >> files/gpgkey.txt
	@gpg --export -a morgan@localstatic.com >> files/gpgkey.txt

