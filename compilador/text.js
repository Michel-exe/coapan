const txt=
`DATOS:
	string txt1=2FA1h,
	string txt2=2FA2h,
	string txt3=2FA3h,
	int ent1=0AAAh,
	int ent2=0Bh,
	int ent3=ABh,
	int ent4=BAh,
FINDATOS;
var1:{
	mul AX,ent3.
	add AX,ent4.
	mov AX,txt2.
	mov AX,txt1.};
var2:{
	ADd BX,DX.
	RES AX,CX.
	mov CX,ent2.};
CODE:
	add AX,BX.
	add BX,ent1.
	Jump var1.
	add AX,BX.
	mov AX,txt3.
	mov AX,txt1.
	Jump var2.
FINCODE`;