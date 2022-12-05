import React from 'react';
import { Link } from '@inertiajs/inertia-react';

export default function NavLink({ href, active, children }) {
    return (
        <Link
            href={href}
            className={
                active
                    ? 'inline-flex items-center px-1 pt-1 border-b-4 border-green-300 text-sm font-medium leading-5 text-green-300 focus:outline-none  focus:border-green-300 transition duration-150 ease-in-out'
                    : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-white hover:text-slate-200 hover:border-green-300 focus:outline-none focus:text-green-300 focus:border-gray-300 transition duration-150 ease-in-out'
            }
        >
            {children}
        </Link>
    );
}
