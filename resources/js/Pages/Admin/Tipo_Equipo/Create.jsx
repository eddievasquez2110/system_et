import React, {  useState } from 'react'
import Navbar from '@/Layouts/Navbar';
import { Head, useForm, Link } from '@inertiajs/inertia-react';

const Create = ({auth}) => {
    const [preview, setPreview] = useState('');
    const {data, setData, errors, post, progress} = useForm({
        Nombre_Tipo_Equipo:"",
        Imagen: null,
    });
    console.log(data);
    const onSelectedFile = (e) =>{
        const file = e.target.files[0];
        const url = URL.createObjectURL(file);
        setPreview(url);
    }

function handleSubmit(e){
    e.preventDefault();
    post(route('tequipo.store'))
}
  return (
    <Navbar auth={auth}>
        <Head title='Tipo Equipo'/>
        <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
  
                            <div className="flex items-center justify-between mb-6">
                                <Link
                                    className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                    href={ route("tequipo.index") }
                                >
                                    Back
                                </Link>
                            </div>
  
                            <form name="createForm" onSubmit={handleSubmit}>
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <label className="">Nombre Tipo de equipo</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2"
                                            label="tipo_equipo"
                                            name="tipo_equipo"
                                            value={data.Nombre_Tipo_Equipo}
                                            onChange={(e) =>
                                                setData("Nombre_Tipo_Equipo", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Nombre_Tipo_Equipo}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Subir Imagen</label>
                                        <div className='mt-4 mb-4'>
                                           {preview && <img src={`${preview}`} alt="" style={{width:'300px'}}  /> }
                                        </div>
                                        <div className='flex items-center justify-center w-full'>
                                        <label className='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div className='flex flex-col items-center justify-center pt-7'>
                                        <svg className="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <p className='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                                        </div>
                                        <input
                                            type="file"
                                            className="hidden"
                                            label="imagen"
                                            name="imagen"
                                            onChange={(e) =>
                                                {setData("Imagen", e.target.files[0]);
                                                onSelectedFile(e)}
                                            }
                                        />
                                        </label>
                                        
                                        </div>
                                        
                                        <span className="text-red-600">
                                            {errors.Imagen}
                                        </span>
                                    </div>
                                </div>
                                {progress && (
                                  <div className="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div className="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" width={progress.percentage}> {progress.percentage}%</div>
                                  </div>
                                )}
                                <div className="mt-4">
                                    <button
                                        type="submit"
                                        className="px-6 py-2 font-bold text-white bg-green-500 rounded"
                                    >
                                        Guardar
                                    </button>
                                </div>
                            </form>
  
                        </div>
                    </div>
                </div>
            </div>
    </Navbar>
  )
}

export default Create
