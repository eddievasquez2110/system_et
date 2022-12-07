import React, { useState } from 'react'
import Navbar from '@/Layouts/Navbar'
import { Head, useForm, usePage, Link } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

const Edit = ({auth,espSoftwares}) => {
    const [preview, setPreview] = useState('');
    const {data, setData, errors, put, progress} = useForm({
        Nombre_Software: espSoftwares.Nombre_Software,
        Nombre_Uso_Equipo: espSoftwares.Nombre_Uso_Equipo,
        Nombre_Especificacion_Software: espSoftwares.Nombre_Especificacion_Software,
        Especificacion_Software: espSoftwares.Especificacion_Software,
    });
    //console.log(usos[0].ID_Uso_Equipo);
    function handleSubmit(e) {
        e.preventDefault();
        Inertia.post(route('d.especificacionsoftware.update',`${espSoftwares.ID_Especificacion_Software}`),{
            _method: 'put',
            Nombre_Software: data.Nombre_Software,
            Nombre_Uso_Equipo: data.Nombre_Uso_Equipo,
            Nombre_Especificacion_Software: data.Nombre_Especificacion_Software,
            Especificacion_Software: data.Especificacion_Software,
          })
        /* put(route("d.tipoequipos.update", `${equipo.ID_Tipo_Equipo}`)); */
    }
  return (
    <Navbar auth={auth}>
        <Head title="Especificacion Software" />
        <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">

                            <div className="flex items-center justify-between mb-6">
                                <Link
                                    className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                    href={ route("d.especificacionsoftware.index") }
                                >
                                    Regresar
                                </Link>
                            </div>

                            <form name="createForm" onSubmit={handleSubmit}>
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <label className="">Nombre Software</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Nombre_Software"
                                            name="Nombre_Software"
                                            value={data.Nombre_Software}
                                            onChange={(e) =>
                                                setData("Nombre_Software", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Nombre_Software}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Uso Equipo</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Nombre_Uso_Equipo"
                                            name="Nombre_Uso_Equipo"
                                            value={data.Nombre_Uso_Equipo}
                                            onChange={(e) =>
                                                setData("Nombre_Uso_Equipo", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Nombre_Uso_Equipo}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Nombre Especificacion Equipo</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Nombre_Especificacion_Software"
                                            name="Nombre_Especificacion_Software"
                                            value={data.Nombre_Especificacion_Software}
                                            onChange={(e) =>
                                                setData("Nombre_Especificacion_Software", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Nombre_Especificacion_Software}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Especificacion Equipo</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Especificacion_Software"
                                            name="Especificacion_Software"
                                            value={data.Especificacion_Software}
                                            onChange={(e) =>
                                                setData("Especificacion_Software", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Especificacion_Software}
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
                                        Actualizar
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

export default Edit