import React, { useState } from 'react'
import Navbar from '@/Layouts/Navbar'
import { Head, useForm, usePage, Link } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

const Edit = ({auth,espEquipos}) => {
    const [preview, setPreview] = useState('');
    const {data, setData, errors, put, progress} = useForm({
        Nombre_Tipo_Equipo: espEquipos.Nombre_Tipo_Equipo,
        Nombre_Uso_Equipo: espEquipos.Nombre_Uso_Equipo,
        Nombre_Especificacion_Equipo: espEquipos.Nombre_Especificacion_Equipo,
        Especificacion_Equipo: espEquipos.Especificacion_Equipo,
    });
    //console.log(usos[0].ID_Uso_Equipo);
    function handleSubmit(e) {
        e.preventDefault();
        Inertia.post(route('d.especificacionequipo.update',`${espEquipos.ID_Especificacion_Equipo}`),{
            _method: 'put',
            Nombre_Tipo_Equipo: data.Nombre_Tipo_Equipo,
            Nombre_Uso_Equipo: data.Nombre_Uso_Equipo,
            Nombre_Especificacion_Equipo: data.Nombre_Especificacion_Equipo,
            Especificacion_Equipo: data.Especificacion_Equipo,
          })
        /* put(route("d.tipoequipos.update", `${equipo.ID_Tipo_Equipo}`)); */
    }
  return (
    <Navbar auth={auth}>
        <Head title="Uso Equipo" />
        <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">

                            <div className="flex items-center justify-between mb-6">
                                <Link
                                    className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                    href={ route("d.especificacionequipo.index") }
                                >
                                    Back
                                </Link>
                            </div>

                            <form name="createForm" onSubmit={handleSubmit}>
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <label className="">Tipo Equipo</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Nombre_Tipo_Equipo"
                                            name="Nombre_Tipo_Equipo"
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
                                            label="Nombre_Especificacion_Equipo"
                                            name="Nombre_Especificacion_Equipo"
                                            value={data.Nombre_Especificacion_Equipo}
                                            onChange={(e) =>
                                                setData("Nombre_Especificacion_Equipo", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Nombre_Especificacion_Equipo}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Especificacion Equipo</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Especificacion_Equipo"
                                            name="Especificacion_Equipo"
                                            value={data.Especificacion_Equipo}
                                            onChange={(e) =>
                                                setData("Especificacion_Equipo", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Especificacion_Equipo}
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