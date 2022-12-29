import React, {  useState } from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head, useForm, Link } from '@inertiajs/inertia-react';

const Create = ({auth}) => {
    const [preview, setPreview] = useState('');
    const {data, setData, errors, post, progress} = useForm({
        Nombre_Oficina:"",
        Cargo_Oficina:"",
    });

function handleSubmit(e){
    e.preventDefault();
    post(route('d.oficinas.store'))
}
  return (
    <Navbar auth={auth}>
        <Head title='Roles'/>
        <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">

                            <div className="flex items-center justify-between mb-6">
                                <Link
                                    className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                    href={ route("d.oficinas.index") }
                                >
                                    Regresar
                                </Link>
                            </div>

                            <form name="createForm" onSubmit={handleSubmit}>
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <label className="">Nombre de Oficina</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Nombre_Oficina"
                                            name="Nombre_Oficina"
                                            value={data.Nombre_Oficina}
                                            onChange={(e) =>
                                                setData("Nombre_Oficina", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Nombre_Oficina}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Cargo de Oficina</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Cargo_Oficina"
                                            name="Cargo_Oficina"
                                            value={data.Cargo_Oficina}
                                            onChange={(e) =>
                                                setData("Cargo_Oficina", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Cargo_Oficina}
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