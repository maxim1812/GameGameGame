function getHero()
{
	let obj = new Object();
	
	obj.x = 0;
	obj.y = 0;
	obj.size = 50;
	obj.live = 100;
	obj.speed = 5;
	
	obj.draw = function()
	{
		holst.fillStyle = '#0000FF';
		holst.fillRect(this.x, this.y, this.size, this.size);
	}
	
	return obj;
}

function getEnemy()
{
	let obj = new Object();
	
	obj.x = 0;
	obj.y = 0;
	obj.size = 50;
	obj.live = 100;
	obj.speed = 5;
	
	obj.draw = function()
	{
		holst.fillStyle = '#000000';
		holst.fillRect(this.x, this.y, this.size, this.size);
	}
	
	return obj;
}

