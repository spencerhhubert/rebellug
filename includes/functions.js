function next_nth_day(day, count) {
	function loop_month() {
		source.setDate(1)
		let i = 1;
		let j = 0;
		while (source.getDay() != day || j != count) {
			if (source.getDay() == day) {
				j++;
			}
			i++;
			source.setDate(i);
		}
	}
	source = new Date();
	loop_month();
	if (source < (new Date())) {
		source = new Date();
		source.setMonth(source.getMonth() + 1);
		loop_month();
	}
	return source;
}

function days_until(date_obj) {
	let one_day = 24 * 60 * 60 * 1000;
	let today = new Date();
	return Math.round(Math.abs((today - date_obj) / one_day));
}
