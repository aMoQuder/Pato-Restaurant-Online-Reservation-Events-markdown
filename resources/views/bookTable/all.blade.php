@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}



    <!-- ========== section start ========== -->
    <section>
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title d-flex align-items-center flex-wrap">
                            <h2 class="mr-40">BOOK TABLE</h2>
                            <a href="javascript:void(0);" onclick="downloadPDF()"
                                class="main-btn primary-btn btn-hover btn-sm">
                                <i class="lni lni-plus mr-5"></i> Download pdf </a>

                            <a href="javascript:void(0);" onclick="downloadExcel()"
                                class="main-btn success-btn-outline btn-hover">
                                Download Excel
                            </a>

                            <!-- زر تحميل PowerPoint -->
                            <a href="javascript:void(0);" onclick="downloadPowerPoint()"
                                class="main-btn success-btn-outline btn-hover">
                                Download PowerPoint
                            </a>

                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0" onclick="printPage()">Print</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Book of Table </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- Invoice Wrapper Start -->
            <div class="invoice-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice-card card-style mb-30">
                            <div class="invoice-header">
                                <div class="invoice-for">
                                    <h2 class="mb-10">Book of TAble</h2>
                                    <p class="text-sm">
                                        Admin Dashboard Design & Development
                                    </p>
                                </div>
                                <div class="invoice-logo">
                                    <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                                </div>
                                <div class="invoice-date">
                                    <p><span>New Booking:</span> 20/02/2024</p>
                                    <p><span>All Booking :</span>{{ $bookTables->count() }}</p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="invoice-table table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="service">
                                                <h6 class="text-sm text-medium ">Name</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">peaple</h6>
                                            </th>
                                            <th class="qty">
                                                <h6 class="text-sm text-medium">Date</h6>
                                            </th>
                                            <th class="amount">
                                                <h6 class="text-sm text-medium">time</h6>
                                            </th>
                                            <th class="amount">
                                                <h6 class="text-sm text-medium">action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookTables as $bookTable)
                                            <tr>
                                                <td>

                                                    <div class="action justify-content-start ">



                                                        @if ($bookTable->nafigation == 1)
                                                            <a href="{{ route('showBook', $bookTable->id) }}"
                                                                class="icon-style" style="background-color:brown; ">
                                                                <i class="lni lni-cloud-upload "></i>
                                                            </a>
                                                        @elseif ($bookTable->nafigation == 2)
                                                            <a href="{{ route('showBook', $bookTable->id) }}"
                                                                class="icon-style"
                                                                style="background-color:rgb(17, 21, 243); ">
                                                                <i class="mdi mdi-chat-question-outline"></i>
                                                            </a>
                                                        @elseif ($bookTable->nafigation == 3)
                                                            <a href="{{ route('showBook', $bookTable->id) }}"
                                                                class="icon-style" style="background-color:forestgreen; ">
                                                                <i class="mdi mdi-check-decagram-outline"></i>
                                                            </a>
                                                        @endif



                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $bookTable->name }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">
                                                        {{ $bookTable->Num_peaple }} </p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $bookTable->date }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $bookTable->time }}</p>
                                                </td>
                                                <td>
                                                    <div class="action justify-content-start ">



                                                        <a href="{{ route('deletBook', $bookTable->id) }}"
                                                            class=" text-danger  " style="margin-left: 7px;">
                                                            <i class="lni lni-trash-can "></i>
                                                        </a>

                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- ENd Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- Invoice Wrapper End -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->





    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')


    <script>
        // دالة لتحميل PDF باستخدام html2pdf
        function downloadPDF() {
            var element = document.querySelector('section');
            var opt = {
                margin: 0.5,
                filename: 'book-table.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
            };
            html2pdf().set(opt).from(element).save();
        }

        // دالة للطباعة
        function printPage() {
            window.print();
        }

        function downloadExcel() {
            var table = document.getElementById("bookTable");
            var workbook = XLSX.utils.table_to_book(table, {
                sheet: "Sheet1"
            });

            // إضافة أنماط يدوية
            var ws = workbook.Sheets["Sheet1"];
            var range = XLSX.utils.decode_range(ws['!ref']);

            for (var R = range.s.r; R <= range.e.r; ++R) {
                for (var C = range.s.c; C <= range.e.c; ++C) {
                    var cell_address = {
                        c: C,
                        r: R
                    };
                    var cell_ref = XLSX.utils.encode_cell(cell_address);
                    if (!ws[cell_ref]) continue;

                    ws[cell_ref].s = {
                        fill: {
                            fgColor: {
                                rgb: "FFFF00"
                            }
                        },
                        font: {
                            bold: true
                        },
                        border: {
                            top: {
                                style: "thin",
                                color: {
                                    rgb: "000000"
                                }
                            },
                            bottom: {
                                style: "thin",
                                color: {
                                    rgb: "000000"
                                }
                            },
                            left: {
                                style: "thin",
                                color: {
                                    rgb: "000000"
                                }
                            },
                            right: {
                                style: "thin",
                                color: {
                                    rgb: "000000"
                                }
                            }
                        }
                    };
                }
            }
            XLSX.writeFile(workbook, 'book-table.xlsx');
        }

        // دالة لتحويل البيانات إلى ملف PowerPoint مع أنماط
        function downloadPowerPoint() {
            var pptx = new PptxGenJS();

            // إنشاء شريحة جديدة
            var slide = pptx.addSlide();

            // إضافة عنوان إلى الشريحة
            slide.addText("Book Table", {
                x: 1,
                y: 0.5,
                fontSize: 24,
                bold: true,
                color: '0000FF'
            });

            // إضافة جدول إلى الشريحة مع أنماط
            var rows = [
                [{
                        text: "Name",
                        options: {
                            bold: true,
                            fill: "87CEEB"
                        }
                    },
                    {
                        text: "People",
                        options: {
                            bold: true,
                            fill: "87CEEB"
                        }
                    },
                    {
                        text: "Date",
                        options: {
                            bold: true,
                            fill: "87CEEB"
                        }
                    },
                    {
                        text: "Time",
                        options: {
                            bold: true,
                            fill: "87CEEB"
                        }
                    }
                ],
                ["John Doe", "4", "2024-09-28", "18:00"]
            ];

            slide.addTable(rows, {
                x: 1,
                y: 1.5,
                w: 8,
                border: {
                    pt: "1",
                    color: "000000"
                },
                fill: "FFFFFF",
                fontSize: 14,
                valign: "middle",
                align: "center",
                fontFace: "Arial"
            });

            // تحميل ملف PowerPoint
            pptx.writeFile("book-table.pptx");
        }
    </script>
@endsection
