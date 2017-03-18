function getNapr(n)
{
	let move = 'Z';
	
	switch(n)
	{
		case 65:  move = 'A'; break;
		case 68:  move = 'D'; break;
		case 87:  move = 'W'; break;
		case 83:  move = 'S'; break;
	}

	return move;
}