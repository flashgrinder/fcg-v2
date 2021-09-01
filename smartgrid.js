module.exports = {
	filename: "_smart-grid",
	outputStyle: 'scss',
	columns: 12,
	offset: "30px",
	container: {
		maxWidth: "1200px",
		fields: "20px"
	},
	breakPoints: {
		tablet: {
				width: '1024px'
		},
		mobile: {
				width: "940px",
				offset: "15px",
				fields: "15px"
		},
		mobileXL: {
				width: "567px"
		},
		mobileXS: {
				width: "400px"
		}
	},
	mobileFirst: false
};