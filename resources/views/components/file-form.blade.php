<form action="{{ route('admin.upload') }}" id="uploadFile" onclick="reset" method="POST" enctype="multipart/form-data"
    autocomplete="off">
    @csrf
    <div class="form-row">

        <div class="form-group col-md-3" id="form-file">

            <label id="title">Selecciona el archivo <label class="text-danger">*</label>:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><i
                            class="fas fa-cloud-upload-alt"></i></span>
                </div>
                <div class="custom-file">
                    <input type="file" class="form-control custom-file-input" name="file" id="file" required
                        accept="application/pdf">
                    <label class="custom-file-label" for="inputGroupFile01" id="filename">Choose file</label>
                </div>
            </div>

            <progress id="progress" max="100" value=""> </progress>
            @error('file')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

        </div>

        <div class="form-group col-md-3">
            <label>Nombre del archivo <label class="text-danger">*</label>: </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-edit"></i></span>
                </div>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                    placeholder="Ingresa el nombre del archivo .." aria-label="Username" aria-describedby="basic-addon1"
                    required />
            </div>
            @error('name')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>

        <div class="form-group col-md-3">
            <label>Selecciona la modalidad <label class="text-danger">*</label>:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-folder"></i></span>
                </div>
                <select class="form-control" name="category">
                    <option value="Monografía">Monografía</option>
                    <option value="Seminario">Seminario de Graduación</option>
                    <option value="Proyecto">Proyecto de Graduación</option>
                </select>
            </div>
            @error('category')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>

        <div class="form-group col-md-3">
            <label>Selecciona la carrera <label class="text-danger">*</label>:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-cogs"></i></span>
                </div>
                <select class="form-control" name="carrer">
                    <option value="Electrónica">Ingeniería Electrónica</option>
                    <option value="Industrial">Ingeniería Industrial</option>
                    <option value="Geológica">Ingeniería Geológica</option>
                </select>
            </div>
            @error('carrer')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>

    </div>

    <div class="row">
        <div class="form-group col-sm-6">
            <label>Ingresa los autores <label class="text-danger">*</label>:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                </div>
                <input type="text" class="form-control" name="authors" id="authors"
                    placeholder="Ingresa los autores .." aria-label="Author" required />
            </div>
            @error('authors')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>

        <div class="form-group col-sm-2">
            <label>Ingresa el año <label class="text-danger">*</label>:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class=" fas fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="date-own form-control form-control" name="date" id="date" autocomplete="off"
                    placeholder="Ingresa el año .." aria-label="Year" required />
            </div>
            @error('date')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>

        <div class="form-group col-sm-4">
            <label>Linea de Investigación <label class="text-danger">*</label>:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-chart-line"></i></span>
                </div>
                <input type="text" class="form-control" name="line" id="line"
                    placeholder="Ingrese la línea de investigación .." aria-label="line" required />
            </div>
            @error('line')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>

    </div>

    <div class="row">
        <div class="col-sm-8 offset-md-2 text-center">
            <label>Ingresa la descripción del documento<label class="text-danger">*</label>:</label>
            <textarea class="form-group col-md-3" name="description" id="description" rows="10">
                                                                                                                                                                                                                                                                                                                                                            </textarea>
            @error('description')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! something went wrong</strong><br> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-5 offset-sm-4">
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary" id="data">Subir <i class="fas fa-upload"></i></button>
                <button type="reset" class="btn btn-danger" id="resetAll">Reset <i
                        class="fas fa-trash-restore-alt"></i></button>
            </div>
        </div>
    </div>
</form>
