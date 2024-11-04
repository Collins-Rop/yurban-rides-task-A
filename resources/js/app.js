document.addEventListener('DOMContentLoaded', function() {
    // Dynamic County-SubCounty Selection
    const countySelect = document.querySelector('select[name="county"]');
    const subCountySelect = document.querySelector('select[name="sub_county"]');
    
    if (countySelect && subCountySelect) {
        const subCountyData = {
            'Nairobi': ['Westlands', 'Dagoretti', 'Kibra', 'Roysambu', 'Kasarani'],
            'Mombasa': ['Nyali', 'Kisauni', 'Likoni', 'Mvita', 'Changamwe'],
            'Kisumu': ['Kisumu East', 'Kisumu West', 'Kisumu Central', 'Nyando', 'Muhoroni'],
            // Add more counties and sub-counties as needed
        };

        countySelect.addEventListener('change', function() {
            const selectedCounty = this.value;
            subCountySelect.innerHTML = '<option value="">Select Sub-County</option>';
            
            if (selectedCounty && subCountyData[selectedCounty]) {
                subCountyData[selectedCounty].forEach(subCounty => {
                    const option = document.createElement('option');
                    option.value = subCounty;
                    option.textContent = subCounty;
                    subCountySelect.appendChild(option);
                });
            }
        });
    }

    // PIN Input Validation
    const pinInput = document.querySelector('input[name="pin"]');
    if (pinInput) {
        pinInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 4);
        });
    }

    // Phone Number Validation
    const phoneInput = document.querySelector('input[name="phone_number"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        });
    }
});