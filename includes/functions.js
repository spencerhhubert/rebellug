function next_nth_day(day, count) {
	source = new Date();
	source.setDate(1);
	let i = 1;
	let j = 0;
	while (source.getDay() != day || j != count) {
		if (source.getDay() == day) {
			j++;
		}
		i++;
		source.setDate(i);
	}
	if (source < (new Date())) {
		source = new Date();
		source.setMonth(source.getMonth() + 1)
		source.setDate(1);
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
	return new Date(source);
}

