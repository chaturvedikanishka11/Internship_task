<table id="bootstrap-data-table-export" class="table table-striped table-bordered">

	@if(session('message'))

		 <p class = "alert alert-success">
		 	{{session('message')}}
		 </p>
		 @endif
		 <br>
                                    <thead>
                                        <tr>
                                        	<th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Package_name</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $id=1; ?>
                                    	@foreach($data as $datas)
                                        <tr>
                                            <td>{{$id++}}</td>
                                            <td>{{$datas->name}}</td>
                                            <td>{{$datas->email}}</td>
                                            <td>{{$datas->mobile}}</td>
                                            <td>{{$datas->package_name}}</td>
                                            <td>
                                            	<a href="{{url('/show/'.$datas->id)}}">show</a>
                                            	<a href="{{url('/edit/'.$datas->id)}}">edit</a>
                                            	<a href="{{url('/delete/'.$datas->id)}}">delete</a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>