import React, { useEffect } from 'react';
import Checkbox from '@/Components/Checkbox';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/inertia-react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'

import { faKey,faUser,faMoneyBill } from '@fortawesome/free-solid-svg-icons'

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const onHandleChange = (event) => {
        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    return (
        <GuestLayout>
            <Head title="Log in" />
            {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}
            
            <form onSubmit={submit}>
                <div className="mt-4 flex">
                    
                    <FontAwesomeIcon className="mt-5 h-8 w-16" icon={faUser} /> 
                    <div className='flex-col w-full'>
                    <InputLabel forInput="email" value="Email" />
                    
                    <TextInput
                        type="email"
                        name="email"
                        value={data.email}
                        className="mt-1 w-full"
                        autoComplete="email"
                        isFocused={true}
                        handleChange={onHandleChange}
                    />

                    <InputError message={errors.email} className="mt-2" />
                </div><br/>
                </div>

                <div className="mt-4 flex">
                
                <FontAwesomeIcon className="mt-5 h-8 w-16"  icon={faKey} />
                    <div className='flex-col w-full'>
                    <InputLabel forInput="password" value="Password" />

                    <TextInput
                        type="password"
                        name="password"
                        value={data.password}
                        className="mt-1 w-full"
                        autoComplete="current-password"
                        handleChange={onHandleChange}
                    />

                    <InputError message={errors.password} className="mt-2" />
                    </div>
                </div>

                
                <div className="block mt-4">
                    <label className="flex items-center">
                        <Checkbox name="remember" value={data.remember} handleChange={onHandleChange} />

                        <span className="ml-2 text-sm text-gray-600 ">Recuérdame</span>
                    </label>
                </div>

                <div className="flex flex-col items-center justify-end mt-4">
                    <PrimaryButton className="flex justify-center w-80 " processing={processing}>
                        Ingresar
                    </PrimaryButton>

                    {canResetPassword && (
                        <Link
                            href={route('password.request')}
                            className="underline mt-4 text-sm text-blue-600 hover:text-red-900"
                        >
                            ¿Olvidaste tu contraseña?
                        </Link>
                    )}

                    
                </div>
                <span className="flex text-center mt-5 text-xs text-gray-600 ">OFICINA GENERAL DE GESTIÓN DE SISTEMAS DE INFORMACIÓN Y COMUNICACIONES</span>
            </form>
        </GuestLayout>
    );
}
