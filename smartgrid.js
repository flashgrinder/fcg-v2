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
				width: "940px"
		},
		mobileMD: {
				width: "768px"
		},
		mobileXS: {
				width: "576px",
                fields: "10px",
                offset: "10px"
		},
		mobileXSS: {
				width: "400px"
		}
	},
	mobileFirst: false
};