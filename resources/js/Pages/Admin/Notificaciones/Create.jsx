import React, {  useState } from 'react'
import GuestLayout from '@/Layouts/GuestLayout';

import { Head, useForm, Link } from '@inertiajs/inertia-react';
import PrimaryButton from '@/Components/PrimaryButton';

const Create = ({auth}) => {
    const [preview, setPreview] = useState('');
    const {data, setData, errors, post, progress} = useForm({
        Email_User:"",
        Asunto_User:"",
        Mensaje_User:"",
    });

function handleSubmit(e){
    e.preventDefault();
    post(route('notificaciones.store'))
}
  return (
    <GuestLayout auth={auth} label='CONTACTAR CON ADMINISTRADOR'>
        <Head title='Uso Equipo'/>
        <div className="py-2">
                <div className="max-w-2xl mx-auto sm:px-2 lg:px-2">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">

                            <form name="createForm" onSubmit={handleSubmit}>
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <label className="">Email</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Email_User"
                                            name="Email_User"
                                            value={data.Email_User}
                                            onChange={(e) =>
                                                setData("Email_User", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Email_User}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Asunto</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Asunto_User"
                                            name="Asunto_User"
                                            value={data.Asunto_User}
                                            onChange={(e) =>
                                                setData("Asunto_User", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Asunto_User}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <label className="">Mensaje</label>
                                        <input
                                            type="text"
                                            className="w-full px-4 py-2 text-gray-500"
                                            label="Mensaje_User"
                                            name="Mensaje_User"
                                            value={data.Mensaje_User}
                                            onChange={(e) =>
                                                setData("Mensaje_User", e.target.value)
                                            }
                                        />
                                        <span className="text-red-600">
                                            {errors.Mensaje_User}
                                        </span>
                                    </div>
                                </div>

                                {progress && (
                                  <div className="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div className="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" width={progress.percentage}> {progress.percentage}%</div>
                                  </div>
                                )}
                                <div className="mt-5 flex items-center justify-center mt-4 space-x-12">
                                    <Link
                                        className="px-9 py-4 text-white bg-blue-500 rounded-md focus:outline-none"
                                        href={ route("login") }
                                    >
                                        Regresar
                                    </Link>
                                    <PrimaryButton className="ml-4" >
                                        Enviar
                                    </PrimaryButton>
                                    
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </GuestLayout>
  )
}

export default Create