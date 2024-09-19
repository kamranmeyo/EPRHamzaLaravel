<!-- Checklist Modal -->
<div class="modal fade" id="checklistModal" tabindex="-1" role="dialog" aria-labelledby="checklistModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checklistModalLabel">PRE-CHECK & ELIGIBILITY CHECKLIST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Left Side of Checklist -->
          <div class="col-md-6">
            <div id="leftChecklist"></div>
          </div>
          <!-- Right Side of Checklist -->
          <div class="col-md-6">
            <div id="rightChecklist"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success" onclick="submitChecklist()">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
    function openChecklistModal() {
        $('#checklistModal').modal('show');
        // Fetch checklist data from API
        fetchChecklistData();
    }

    function fetchChecklistData() {
        // Using Axios or jQuery to get data from API
        axios.get('/api/checklist')  // Change URL to your API endpoint
            .then(function(response) {
                const checklists = response.data;
                populateChecklist(checklists);
            })
            .catch(function(error) {
                console.error('Error fetching checklist data:', error);
            });
    }

    function populateChecklist(checklists) {
        const leftChecklist = document.getElementById('leftChecklist');
        const rightChecklist = document.getElementById('rightChecklist');
        
        // Clear existing data
        leftChecklist.innerHTML = '';
        rightChecklist.innerHTML = '';

        const half = Math.ceil(checklists.length / 2);

        checklists.forEach((item, index) => {
            const checklistItem = `
                <div class="card mb-3 d-flex align-items-center justify-content-between p-3">
                    <div style="width: 80%">
                        <span>${item.CheckList}</span>
                    </div>
                    <div style="width: 20%">
                        <select class="form-control" id="checklist-select-${index}">
                            <option value="1">✅</option>
                            <option value="2">NA</option>
                            <option value="3">❌</option>
                        </select>
                    </div>
                </div>
            `;

            if (index < half) {
                leftChecklist.innerHTML += checklistItem;
            } else {
                rightChecklist.innerHTML += checklistItem;
            }
        });
    }

    function submitChecklist() {
        // Add your checklist submission logic here
        console.log('Checklist submitted');
    }
</script>
