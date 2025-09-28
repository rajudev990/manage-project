@extends('student.app')

@section('student')

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <!-- Progress Header -->
                <div class="progress-container mb-4">
                    <h5 class="mb-0 text-light title">Estimated time remaining: 12 minutes</h5>
                    <div class="progress mt-2">
                        <div class="progress-bar" id="progressBar" role="progressbar" style="width: 10%;"></div>
                    </div>
                    <small id="progressText" class="text-light">10%</small>
                </div>
            </div>
        </div>

        <form action="{{ route('form.step.post', 3) }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div id="studentsContainer">
                        <!-- First Student Card -->
                        <div class="card p-4 mb-3 student-card" style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                            <div class="card-body">
                                <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">Tell us about your first child</h3>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>First Name<span class="text-danger">*</span></label>
                                            <input type="text" name="fname[]" class="form-control" placeholder="First name here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>Last Name<span class="text-danger">*</span></label>
                                            <input type="text" name="lname[]" class="form-control" placeholder="Last name here" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>DOB<span class="text-danger">*</span></label>
                                            <input type="date" name="dob[]" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>Gender<span class="text-danger">*</span></label>
                                            <select name="gender[]" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>Nationality<span class="text-danger">*</span></label>
                                            <select name="nationality[]" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Bangladeshi">Bangladeshi</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Pakistani">Pakistani</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Sri Lankan">Sri Lankan</option>
                                                <option value="Bhutanese">Bhutanese</option>
                                                <option value="Maldivian">Maldivian</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>Desired Start Date<span class="text-danger">*</span></label>
                                            <select name="start_date[]" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="12/12/2025">12/12/2025</option>
                                                <option value="12/12/2026">12/12/2026</option>
                                                <option value="12/12/2027">12/12/2027</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>Group<span class="text-danger">*</span></label>
                                            <select name="group_id[]" class="form-control form-select group-select">
                                                <option value="">-- Select --</option>
                                                @foreach($groups as $g)
                                                <option value="{{ $g->id }}">{{ $g->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label>Year<span class="text-danger">*</span></label>
                                            <select name="year_id[]" class="form-control form-select year-select">
                                                <option value="">-- Select --</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label>Package<span class="text-danger">*</span></label>
                                            <select name="package_id[]" class="form-control form-select package-select">
                                                <option value="">-- Select --</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Subjects -->
                                    <div class="col-lg-12 coreSubjectsDiv" style="display:none;">
                                        <div class="form-group mb-4">
                                            <label>Core Subjects</label>
                                            <div class="subjectsContainer"></div>
                                            <input type="hidden" name="core_subjects[]" class="core-subjects-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 islamicSubjectsDiv" style="display:none;">
                                        <div class="form-group mb-4">
                                            <label>Islamic Subjects</label>
                                            <div class="subjectsContainer"></div>
                                            <input type="hidden" name="islamic_subjects[]" class="islamic-subjects-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 additionalSubjectsDiv" style="display:none;">
                                        <div class="form-group mb-4">
                                            <label>Additional Subjects</label>
                                            <div class="subjectsContainer"></div>
                                            <input type="hidden" name="additional_subjects[]" class="additional-subjects-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 languageDiv" style="display:none;">
                                        <div class="form-group mb-4">
                                            <label>Languages</label>
                                            <div class="subjectsContainer"></div>
                                            <input type="hidden" name="language_subjects[]" class="language-subjects-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 hifdhDiv" style="display:none;">
                                        <div class="form-group mb-4">
                                            <label>Hifdh Subjects</label>
                                            <div class="subjectsContainer"></div>
                                            <input type="hidden" name="hifdh_subjects[]" class="hifdh-subjects-input">
                                        </div>
                                        <label class="custom-check">
                                            <input type="checkbox" name="hifdh_option[]">
                                            <span class="custom-checkmark"></span>
                                            <span class="text-light" id="hifdhText"></span>
                                        </label>
                                    </div>

                                    <!-- Documents -->
                                    <div class="col-lg-12 mt-3">
                                        <div class="card">
                                            <div class="card-body text-dark">
                                                <h3>Documents<span class="text-danger">*</span></h3>
                                                <ol>
                                                    <li>Proof of ID (Passport, Birth Certificate, National ID)</li>
                                                    <li>Previous Academic Years Report</li>
                                                </ol>
                                                <div class="row">
                                                    <div class="col-lg-6 text-center">
                                                        <label class="form-label d-block">Proof Of Parents ID</label>
                                                        <input type="file" class="d-none parent-file1" name="student_file1[]">
                                                        <label class="btn form-control" style="background: #061E42;color:#FFF;">Choose File <i class="fas fa-plus"></i></label>
                                                        <div class="fileName mt-2 text-muted">No file chosen yet</div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <label class="form-label d-block">Proof Of Parents ID</label>
                                                        <input type="file" class="d-none parent-file2" name="student_file2[]">
                                                        <label class="btn form-control" style="background: #061E42;color:#FFF;">Choose File <i class="fas fa-plus"></i></label>
                                                        <div class="fileName mt-2 text-muted">No file chosen yet</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- row -->
                            </div>
                        </div> <!-- first student card -->
                    </div>
                </div>
            </div>

            <!-- Add More / Continue -->
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <p id="addMore" class="btn w-100 py-3" style="background: #183E77;color:#FFF;cursor:pointer;">Add More Students <i class="fa fa-plus ms-3"></i></p>
                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 2) }}" class="text-light text-decoration-none"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection

@section('script')
<script>
    $(document).ready(function() {

        function initCard(card) {
            // Group → Year
            card.find('.group-select').change(function() {
                let group_id = $(this).val();
                let yearSelect = card.find('.year-select');
                let packageSelect = card.find('.package-select');

                yearSelect.html('<option value="">-- Select --</option>');
                packageSelect.html('<option value="">-- Select --</option>');
                card.find('.coreSubjectsDiv,.islamicSubjectsDiv,.additionalSubjectsDiv,.languageDiv,.hifdhDiv').hide().find('.subjectsContainer').html('');
                card.find('#hifdhText').text('');

                if (group_id) {
                    $.get('/get-years/' + group_id, function(data) {
                        data.forEach(function(y) {
                            yearSelect.append(`<option value="${y.id}">${y.name}</option>`);
                        });
                    });
                }
            });

            // Year → Package
            card.find('.year-select').change(function() {
                let group_id = card.find('.group-select').val();
                let year_id = $(this).val();
                let packageSelect = card.find('.package-select');

                packageSelect.html('<option value="">-- Select --</option>');
                card.find('.coreSubjectsDiv,.islamicSubjectsDiv,.additionalSubjectsDiv,.languageDiv,.hifdhDiv').hide().find('.subjectsContainer').html('');
                card.find('#hifdhText').text('');

                if (group_id && year_id) {
                    $.get('/get-packages/' + group_id + '/' + year_id, function(data) {
                        data.forEach(function(p) {
                            packageSelect.append(`<option value="${p.id}">${p.name}</option>`);
                        });
                    });
                }
            });

            // Package → Subjects
            card.find('.package-select').change(function() {
                let group_id = card.find('.group-select').val();
                let year_id = card.find('.year-select').val();
                let package_id = $(this).val();

                card.find('.coreSubjectsDiv,.islamicSubjectsDiv,.additionalSubjectsDiv,.languageDiv,.hifdhDiv').hide().find('.subjectsContainer').html('');
                card.find('#hifdhText').text('');

                if (group_id && year_id && package_id) {
                    $.get('/get-course-details', {
                        group_id,
                        year_id,
                        package_id
                    }, function(data) {
                        if (data.core_subject?.length) {
                            data.core_subject.forEach(sub => {
                                card.find('.coreSubjectsDiv .subjectsContainer').append(`<span class="badge mb-1 fs-5 subject-badge" style="background:#AE9A66;cursor:pointer;" data-value="${sub}">${sub}</span> `);
                            });
                            card.find('.coreSubjectsDiv').show();
                        }
                        if (data.islamic_subject?.length) {
                            data.islamic_subject.forEach(sub => {
                                card.find('.islamicSubjectsDiv .subjectsContainer').append(`<span class="badge mb-1 fs-5 subject-badge" style="background:#AE9A66;cursor:pointer;" data-value="${sub}">${sub}</span> `);
                            });
                            card.find('.islamicSubjectsDiv').show();
                        }
                        if (data.additional_subject?.length) {
                            data.additional_subject.forEach(sub => {
                                card.find('.additionalSubjectsDiv .subjectsContainer').append(`<span class="badge mb-1 fs-5 subject-badge" style="background:#AE9A66;cursor:pointer;" data-value="${sub}">${sub}</span> `);
                            });
                            card.find('.additionalSubjectsDiv').show();
                        }
                        if (data.language?.length) {
                            data.language.forEach(sub => {
                                card.find('.languageDiv .subjectsContainer').append(`<span class="badge mb-1 fs-5 subject-badge" style="background:#AE9A66;cursor:pointer;" data-value="${sub}">${sub}</span> `);
                            });
                            card.find('.languageDiv').show();
                        }
                        if (data.hifdh == 1) {
                            card.find('.hifdhDiv .subjectsContainer').html(`<span class="badge mb-1 fs-5 subject-badge" style="background:#AE9A66;cursor:pointer;" data-value="Hifdh">Hifdh</span>`);
                            card.find('#hifdhText').text(data.hifdh_text);
                            card.find('.hifdhDiv').show();
                        }
                    });
                }
            });

            // Badge click → update hidden input
            card.on('click', '.subject-badge', function() {
                $(this).toggleClass('active');
                let subjects = ['coreSubjectsDiv', '.core-subjects-input', 'islamicSubjectsDiv', '.islamic-subjects-input', 'additionalSubjectsDiv', '.additional-subjects-input', 'languageDiv', '.language-subjects-input', 'hifdhDiv', '.hifdh-subjects-input'];
                subjects.forEach(function(s) {
                    let container = card.find('.' + s[0]);
                    let values = [];
                    container.find('.subject-badge.active').each(function() {
                        values.push($(this).data('value'));
                    });
                    container.find(s[1]).val(values.join(','));
                });
            });

            // File preview
            card.find('input[type="file"]').change(function(e) {
                let fileName = e.target.files.length ? e.target.files[0].name : "No file chosen yet";
                $(this).siblings('.fileName').text(fileName);
            });
        }

        // Init first card
        initCard($('#studentsContainer .student-card'));

        // Add More Student
        let studentCount = 1;
        $('#addMore').click(function() {
            studentCount++;
            let newCard = $('#studentsContainer .student-card:first').clone();
            newCard.find('input,select').val('');
            newCard.find('.subjectsContainer').html('');
            newCard.find('.coreSubjectsDiv,.islamicSubjectsDiv,.additionalSubjectsDiv,.languageDiv,.hifdhDiv').hide();
            newCard.find('.fileName').text('No file chosen yet');
            newCard.find('h3').text('Tell us about your child ' + studentCount);
            newCard.append(`<span class="btn btn-danger btn-sm float-end remove-student" style="position:absolute;top:10px;right:10px;">Remove</span>`);
            $('#studentsContainer').append(newCard);
            initCard(newCard);
        });

        // Remove Student
        $(document).on('click', '.remove-student', function() {
            $(this).closest('.student-card').remove();
        });

    });
</script>
@endsection